@extends('layouts.app')
@section('title', 'protocolos de agendamentos')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
            <div class="form-group row">
            <div id="content" class="span9 internas">
                <section id="content-section">
                    <span class="hide">Início do conteúdo da página</span>
                    <div class="row-fluid">
                        <div class="item-page">
                            <h1 class="documentFirstHeading">
                                <a href="/agendamento.html">Agendamento</a></h1>
                                <ul class="actions">
                                </ul>
                                <div class="content-header-options-1 row-fluid">
                                    <div class="documentByLine span7">
                                        <span class="documentModified">Última atualização em Sexta, 18 de Janeiro de 2019, 09h10</span>
                                        <span class="separator">|</span>			
                                        <span class="documentHits">Acessos: 1476</span>
                                    </div>
                                    <div class="btns-social-like span5" style="">
                                <div class="pull-left googleplus">
                                <!-- botão google plus -->
                                <div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1628257049857" name="I0_1628257049857" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;annotation=bubble&amp;hl=pt-BR&amp;origin=https%3A%2F%2Fgmts.ufam.edu.br&amp;url=https%3A%2F%2Fgmts.ufam.edu.br%2Fagendamento.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.pt_BR.yJ2ZnldRVOs.O%2Fam%3DAQ%2Fd%3D1%2Frs%3DAGLTcCNor_T42aH35RUGGXEDohNib5MW7Q%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1628257049857&amp;_gfid=I0_1628257049857&amp;parent=https%3A%2F%2Fgmts.ufam.edu.br&amp;pfname=&amp;rpctoken=10865654" data-gapiattached="true"></iframe></div><div class="g-plusone" data-size="medium" data-annotation="bubble" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>
                                <script type="text/javascript">window.___gcfg={lang:'pt-BR'};(function(){var po=document.createElement('script');po.type='text/javascript';po.async=true;po.src='https://apis.google.com/js/plusone.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po,s);})();</script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
                                <!-- fim botão google plus -->	
                                </div>

                                <div class="pull-left twitter">
                                <!-- botão twitter -->
                                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 70px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.f88235f49a156f8b4cab34c7bc1a0acc.pt.html#dnt=false&amp;id=twitter-widget-0&amp;lang=pt&amp;original_referer=https%3A%2F%2Fgmts.ufam.edu.br%2Fagendamento.html&amp;size=m&amp;text=Agendamento&amp;time=1628257050143&amp;type=share&amp;url=https%3A%2F%2Fgmts.ufam.edu.br%2Fagendamento.html&amp;via=portalbrasil"></iframe>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
                                <!-- fim botão twitter -->	
                                </div>

                                <div class="pull-left facebook">
                                <!-- botão facebook -->
                                <div class="fb-like fb_iframe_widget" data-href="http://www.brasil.gov.br" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=509544779073047&amp;container_width=102&amp;href=http%3A%2F%2Fwww.brasil.gov.br%2F&amp;layout=button_count&amp;locale=pt_BR&amp;sdk=joey&amp;share=false&amp;show_faces=false"><span style="vertical-align: bottom; width: 130px; height: 28px;"><iframe name="f32eecd3a7bc5f8" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=509544779073047&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3438468745169c%26domain%3Dgmts.ufam.edu.br%26origin%3Dhttps%253A%252F%252Fgmts.ufam.edu.br%252Ff2c71a8a797cc18%26relation%3Dparent.parent&amp;container_width=102&amp;href=http%3A%2F%2Fwww.brasil.gov.br%2F&amp;layout=button_count&amp;locale=pt_BR&amp;sdk=joey&amp;share=false&amp;show_faces=false" style="border: none; visibility: visible; width: 130px; height: 28px;" class=""></iframe></span></div>
                                <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
                                <script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=509544779073047";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));</script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
                                <!-- fim botão facebook -->	
                                </div>
                            </div>		
                         </div>
                    <!-- fim .content-header-options-1 -->
                    <p>O agendamento da sala de videoconferência pode ser feito através de solicitação via e-mail para
                    <span id=""><a href="#">bibliotecases.am@gmail.com</a></span><script type="text/javascript">document.getElementById('cloak948e4335bfcac6c44088bb08c48d47ff').innerHTML='';var prefix='&#109;a'+'i&#108;'+'&#116;o';var path='hr'+'ef'+'=';var addy948e4335bfcac6c44088bb08c48d47ff='gmts'+'&#64;';addy948e4335bfcac6c44088bb08c48d47ff=addy948e4335bfcac6c44088bb08c48d47ff+'&#117;f&#97;m'+'&#46;'+'&#101;d&#117;'+'&#46;'+'br';var addy_text948e4335bfcac6c44088bb08c48d47ff='gmts'+'&#64;'+'&#117;f&#97;m'+'&#46;'+'&#101;d&#117;'+'&#46;'+'br';document.getElementById('cloak948e4335bfcac6c44088bb08c48d47ff').innerHTML+='<a '+path+'\''+prefix+':'+addy948e4335bfcac6c44088bb08c48d47ff+'\'>'+addy_text948e4335bfcac6c44088bb08c48d47ff+'<\/a>';</script></p>
                <p>&nbsp;</p>
            <p>Para maiores informações sobre procedimentos e protocolos de agendamento, clique
                <a href="">aqui</a>.&nbsp;</p>
               
            </div>
        <div class="below-content">
    <div class="line">registrado em:<span>
        <a class="link-categoria" rel="tag" href="/agendamento/60-acesso-rapido.html">Acesso Rápido</a></span></div>
</div>
    </div>
        <span class="hide">Fim do conteúdo da página</span>
                        </section>
                    </div>
                <div class="content-header-options-1 row-fluid">
            </div>
        </div>
    </div>
</div>
@endsection