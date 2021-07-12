<div class="form-group">
    <label>Selecione Nivel Categoria</label>
    <select name="parent_id" id="parent_id" class="form-control select2" style="width: 100%;">
      <option value="0">Categoria Principal</option>
      @if(!empty($getCategories))
        @foreach($getCategories as $category)
          <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
          @endforeach
          @endif
              @if(!empty($category['subcategories']))
                  @foreach($category['subcategories'] as $subcategory)
                     <option value="{{ $subcategory['id'] }}">&nbsp;&raquo;&nbsp;{{
                     $subcategory['category_name'] }}</option>
             
          @endforeach  
      @endif
    </select>
  </div>