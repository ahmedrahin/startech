<nav class="navbar" id="main-nav">
    <div class="container">
        <ul class="navbar-nav">
            @foreach(App\Models\Category::with(['subcategories.subsubcategories'])->where('status', 1)->where('featured',1)->get() as $category)
            <li class="nav-item {{ $category->subcategories->count() > 0 ? 'has-child' : '' }}">
                <a class="nav-link" href="{{ route('category.product',$category->slug) }}">
                    {{ $category->name }}
                </a>
                
                @if($category->subcategories->count() > 0)
                <ul class="drop-down drop-menu-1">
                    @foreach($category->subcategories as $subcategory)
                    <li class="nav-item {{ $subcategory->subsubcategories->count() > 0 ? 'has-child' : '' }}">
                        <a class="nav-link" href="{{ route('category.product',$subcategory->slug) }}">
                            {{ $subcategory->name }}
                        </a>
                        
                        @if($subcategory->subsubcategories->count() > 0)
                        <ul class="drop-down drop-menu-2">
                            @foreach($subcategory->subsubcategories as $subsubcategory)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('category.product',$subsubcategory->slug) }}">
                                    {{ $subsubcategory->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                    
                    <li>
                        <a href="{{ url('/shop') }}?categories[0]={{ $category->id }}" class="see-all">Show All {{ $category->name }}</a>
                    </li>
                </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</nav>