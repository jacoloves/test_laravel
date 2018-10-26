<table>
    <form action="/rest" method="post">
        {{ csrf_field() }}
        <tr><th>message: </th><input type="text" name="message" value="{{old('message')}}"></tr>
        <tr><th>url: </th><input type="text" name="url" value="{{old('url')}}"></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>