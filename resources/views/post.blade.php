@extends('layouts.main')

@section('container')

<h1 class="mb-5">Posts : {{ $post->title }}</h1>
<article class="mb-5">
    <h2>
        {{ $post->title }}
    </h2>

    <p>By. Jason Oktavian in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {{-- <h5>{{ $post["author"] }}</h5> --}}
    {{-- {{ $post->body }} --}}
    {!! $post->body !!}
</article>

<a href="/blog">Back</a>

@endsection





{{-- Post::create([
    'title' => 'Third Blog',
    'slug'=>'third-blog',
    'excerpt'=> 'Third lorem ipsum excerpt',
    'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quos odio laudantium sint soluta consequatur ea culpa maiores accusamus? Esse dolorem, atque provident assumenda, velit, repellat ipsa error voluptatem iusto nemo et! Dicta magni nisi neque! Ipsa blanditiis dolorum accusantium sapiente, possimus fugit numquam? Saepe molestias repellendus error! Ducimus quisquam repudiandae molestiae incidunt.</p><p>Tempora expedita saepe minima illo debitis tenetur maxime quia quo. Hic pariatur saepe excepturi temporibus, numquam dignissimos eligendi animi unde perferendis quod? Enim itaque expedita, neque praesentium, alias perspiciatis beatae ut vero fugiat eius aliquid temporibus a ea exercitationem quibusdam molestiae hic nisi, deleniti commodi molestias! Minima similique obcaecati dicta sed, aliquam minus sequi, eos corporis debitis quidem commodi fugit cumque, tempore nesciunt.</p><p>Facilis, nulla veniam ipsum totam eum optio, velit cupiditate quos, molestias doloribus asperiores cum debitis laboriosam nisi amet sit assumenda vero! Debitis officiis beatae velit sequi vero consequuntur a, dolor nisi qui quae corporis autem omnis quisquam possimus. Laborum, magni.</p><p>Enim quibusdam maxime voluptate quo itaque velit debitis molestias deleniti vel temporibus, assumenda distinctio ullam cupiditate? Delectus quod officia eos ipsum possimus necessitatibus eius corporis, ducimus nihil recusandae vitae quibusdam? Atque vero, alias recusandae, id ipsam, laudantium dicta nulla necessitatibus commodi dolorem saepe sequi et aperiam ipsa labore asperiores reiciendis accusantium illum similique. Consequatur mollitia, cum debitis nobis doloremque ad necessitatibus expedita qui! Ad neque aut quasi cupiditate in delectus illo molestias debitis libero officia id voluptates eum dignissimos porro animi, similique necessitatibus! Vero natus provident animi doloribus illum labore quis enim mollitia quasi?</p>'
]) --}}

