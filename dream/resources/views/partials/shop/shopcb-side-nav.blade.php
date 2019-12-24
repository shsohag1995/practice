<div class="col-md-12">
              
         
                <div class="left-navigation">
                    <ul class="list">
                        <h5><strong>Subjects</strong></h5>
                       
           @foreach($categories as $category)
                        <li>
            <a style="text-decoration: none;" href="/shop/{{$shop->slug}}/category/{{$category->category}}" >{{$category->category}}   <span class="glyphicon badge">{{$category->total}}</span></a>
             </li>
             <br>
             @endforeach       
                    </ul>
                </div>
                
             
     </div>