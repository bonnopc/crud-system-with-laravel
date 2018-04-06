<!DOCTYPE html>
<html>
<head>
    <title>Table View</title>
</head>
<body>
<table>
    @foreach($show as $user)
    <tr>
        <td> {{ $user->id }} </td>
        <td> {{ $user->fname }}</td>
        <td> {{ $user->lname }}</td>
        <td> {{ $user->uname }}</td>
        <td> {{ $user->email }}</td>
        <td> {{ $user->pass }}</td>
        <td> {{ $user->timestamp }}</td>
    </tr>
    @endforeach
    <div class="pagination">{!! $show->render() !!}</div>
</table>
</body>
</html>