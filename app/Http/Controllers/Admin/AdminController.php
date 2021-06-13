<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Admin;
use Hash;
use Image;
// use Facade\Ignition\Middleware\AddLogs;
// use Illuminate\Contracts\Session\Session;
// use Illuminate\Contracts\Session\Session as SessionSession;



class AdminController extends Controller
{


    public function dashboard() {
        Session::put('page', 'dashboard');
        return view ('admin.admin_dashboard');
    }
    //Config do admin...
    public function settings() {
        Session::put('page', 'settings');
        // echo "<pre>"; print_r(Auth::guard('admin')->user()); die;
        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view('admin.admin_settings')->with(compact('adminDetails'));
    }

    public function login(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->all();
            // echo"<pre>"; print_r($data); die;

            $rules = [
                'email' =>  'required|email|max:233',
                'password' => 'required',
            ];
            
            $customMessages = [
                'email.required' => 'Email é Obrigatorio',
                'email.email' => 'Validação obrigatoria',
                'password.required' => 'Password Obrigatorio',
            ];
            $this->validate($request, $rules, $customMessages);
           if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])) {
                return redirect('admin/dashboard');
           } else {
               Session::flash('error_message', 'Email Invalido ou Senha');
               return redirect()->back();
           }
        }
        return view ('admin.admin_login');
    }
    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    //CHECANDO AS SENHAS...
    public function chkCurrentPassword(Request $request) {
        $data = $request->all();
        // echo "<pre>"; print_r($data);
        // echo Auth::guard('admin')->user()->password(); die;
        // echo "<pre>"; print_r(Auth::guard('admin')->user()->password); die;
        if(Hash::check($data['current_pwd'],Auth::guard('admin')->user()->password)) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function updateCurrentPassword(Request $request) {
        if($request->isMethod('post')) {
            $data = $request->all();
            // echo"<pre>"; print_r($data); die;
            if(Hash::check($data['current_pwd'],Auth::guard('admin')->user()->password)) {
                    if($data['new_pwd']==$data['confirm_pwd']) {
                        Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data
                        ['new_pwd'])]);
                        Session::flash('success_message', 'Senha Atualizada com sycesso');
                    }else {
                        Session::flash('error_message', 'A nova senha nao e igual a confirmação');
                    }
            }else {
                Session::flash('error_message', 'Sua senha estar incorreta');

            }
            redirect()->back();
        }
    }
    public function updateAdminDetails(Request $request) {
        Session::put('page', 'update-admin-details');
        if($request->isMethod('post')) {
            $data = $request->all();
            // echo"<pre>"; print_r('$data'); die;
            $rules = [
                'admin_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'admin_mobile' => 'required|numeric',
                'admin_image' => 'image',
            ];
            $customMessages = [
                'admin_name_required' => 'Tem que colocar o nome',
                'admin_name_alpha' => 'Nome Valido tem que colocar',
                'admin_mobile.required' => 'Numero e Obrigatorio',
                'admin_mobile.numeric' => 'Valido mobile e important',
                'admin_image.image' => 'Imagem e importante',
            ];
            $this->validate($request, $rules, $customMessages);
            //Upload de imagem
            if($request->hasFile('admin_image')) {
                $image_tmp = $request->file('admin_image');
                if($image_tmp->isValid()){
                    // get image
                    $extension = $image_tmp->getClientOriginalExtension();
                    // gerando novas images name
                    $imageName = rand(111,999999).'.'.$extension;
                    $imagePath = 'images/admin_images/admin_photos/'.$imageName;
                    // Upload da image
                    Image::make($image_tmp)->resize(300,400)->save($imagePath);
                }else if(!empty($data['current_admin_image'])){
                    $imageName = $data['current_admin_image'];
                } else {
                    $imageName = "";
                }
            }
            //atualizacao de admin detalhes
            Admin::where('email',Auth::guard('admin')->user()->email)
            ->update(['name'=>$data['admin_name'],'mobile'=>$data['admin_mobile'],'image'=>$imageName]);
            Session::flash('success_message','Detalhes de ADM atualizado com sucesso');
        }
        return view('admin.update_admin_details');
    }


}
