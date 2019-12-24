<div class="col-md-12">
              
            
                <div class="left-navigation">
                    <ul class="list">

          <h4><strong>Categories</strong></h4>
                      
           @foreach($categories as $category)
                        <li> <div class="dropdown dropdown-inline">
            <a  class=" dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">{{$category->category}}</a>
            <ul class="dropdown-menu" role="menu">
              @foreach($categorytypes as $categorytype)
              @if($category->category==$categorytype->category)
              <li class="dropdown">
                <a style="text-decoration: none;" href="/shop/{{$shop->slug}}/category/{{$categorytype->category}}/type/{{$categorytype->type}}">{{$categorytype->type}}       <span class="glyphicon badge">{{$categorytype->total}}</span></a>
              </li>
              <br>
              @endif
              @endforeach
              </ul>
             </div></li>
             <br>
             @endforeach       
                    </ul>
                </div>
                
             
     </div>