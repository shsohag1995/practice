<header id="header">
      <div class="container"style="padding-top: 15px;">
        <div class="row">
          <div class="col-md-10" >
            <span class="active">Dashboard  /  </span>
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span><small>Manage Your shop</small>
          </div>
          <div class="col-md-2">

            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Edit Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                 @if($shop->type=='Private'&&($shop->user_id==Auth::user()->id||$ok==1))
                <li><a href="/shopmanage/{{$shop->id}}/category/create">Edit category</a></li>
                <li><a href="/shopmanage/{{$shop->id}}/type/create">Edit type</a></li>
                @endif
                @if($shop->user_id==Auth::user()->id)
                <li><a href="/shopmanage/{{$shop->id}}/contact/edit">Edit Contact</a></li>
                <li><a href="/shopmanage/{{$shop->id}}/notice/edit">Edit Notice</a></li>
                <li><a href="/shopmanage/{{$shop->id}}/address/edit">Edit Location</a></li>
                 @endif
                @if($shop->mode=='Premium')
                <li><a href="/shop/{{$shop->id}}/address/{{$shop->id}}/edit">Add Admin</a></li>
                @endif
              </ul>
            </div>

          </div>
        </div>
      </div>
    </header>