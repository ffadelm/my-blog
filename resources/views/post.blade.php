@extends('layouts.main')

@section('container')
<article>
    <h2>{{$post->title}}</h2>
    {!! $post->body !!}
</article>

<a href="/posts">kembali</a>
@endsection


<!-- Post::create(['title'=>'Cerita Masa Lalu ku part 3', 'slug'=> 'cerita-masa-lalu-ku-part-3', 'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus minus dolore exercitationem expedita ratione voluptates illum soluta laudantium, unde, sequi quibusdam nesciunt','body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus minus dolore exercitationem expedita ratione voluptates illum soluta laudantium, unde, sequi quibusdam nesciunt corrupti doloremque itaque sit, quo recusandae necessitatibus! Minus, sed quis. Error suscipit rem sapiente dolores quaerat minus aliquam repellat, id perspiciatis voluptatem quis tempore ullam soluta minima nihil voluptas eos nesciunt quia adipisci esse numquam! Unde laudantium, autem sint quos id dolore minima culpa nesciunt cumque. Saepe illo deserunt accusantium odit quos omnis asperiores iste voluptatum vel incidunt tempore doloribus rerum sapiente, soluta animi sed officia accusamus harum quidem nobis.</p><p>Iste qui aut nulla non nihil voluptate repellendus architecto excepturi molestiae quos rem reiciendis ipsum quisquam adipisci facilis magni, ratione beatae quis iure sed! Harum similique eligendi blanditiis obcaecati fugit velit accusamus perferendis quia architecto animi repellat sunt inventore iure minus ipsa, in doloremque commodi rerum? Commodi minus illo reiciendis nulla corrupti, velit obcaecati eaque dicta unde magni tempore quis adipisci esse asperiores impedit vel magnam dignissimos sunt quaerat earum at.</p><p>Accusantium unde molestias rerum repellendus possimus iusto vitae, doloremque beatae itaque quia ex magnam, ab doloribus voluptatum ipsa voluptates ut dignissimos est delectus. Earum vitae nesciunt, porro repellendus, illo doloremque quaerat sed, natus dolorum qui eligendi numquam.</p>']); -->