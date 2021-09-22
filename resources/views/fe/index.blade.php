

<table>
<tr>
<td>Id</td>
<td>Title</td>
<td>Body</td>
</tr>
@foreach($posts['data'] as $p)
<tr>
<td>{{$p['user_id']}}</td>
<td>{{$p['title']}}</td>
<td>{{$p['body']}}</td>
</tr>
@endforeach
</table>