<ul>
@foreach($subcategories as $subcategory)
 <ul>
    <li>{{$subcategory->name}}</li> 
  @if(count($subcategory->subcategory))
    @include('simulator.subCategoryList',['subcategories' => $subcategory->subcategory])
    
  @endif
 </ul> 
@endforeach
</ul>

