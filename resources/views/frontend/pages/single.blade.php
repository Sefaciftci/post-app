@extends('frontend.layouts.master')

@section('title', 'home')
@section('main')


<div class="container">
    <div class="row my-5">
        <div class="col-9">

            <div>
                <h3 class="title">{{$articlesCheck->title}}</h3>
            </div>

            <div>
                <img src="{{$articlesCheck->image}}" alt="news" />
            </div>

            <div class="content">
                <p>
                    {{$articlesCheck->content}}
                </p>
                <br>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero id quo officiis a ut quisquam repellendus sint illo adipisci. Incidunt veniam ad molestiae quasi quisquam reprehenderit dolor cumque fugiat iste blanditiis. Dolores iste quae voluptatum quod, tenetur quisquam perferendis optio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam tempore repudiandae at dolorem ipsa. Nostrum veniam doloremque delectus architecto dolores provident rerum earum incidunt. Maiores itaque magni aliquid iure impedit molestiae natus sit, debitis officiis expedita laborum aperiam perferendis incidunt, aspernatur voluptatem, alias labore voluptatum. Beatae exercitationem praesentium possimus ex?
                </p>
                <br>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit reiciendis officia magni. Consectetur porro vel est quia quos magni eaque. Praesentium neque sit ab? Consequuntur veritatis explicabo nihil soluta molestias ducimus, distinctio doloremque? Voluptates officiis iure saepe, ratione nihil non.
                </p>
            </div>
        </div>

        <!--news-list widget--> 
        @include('frontend.block.widgets.news-list')

    </div>
</div>




@endsection