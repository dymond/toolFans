<form action="{{route('simple-contact-form.email')}}" method="post">

    @csrf()


    <label for="name">Name</label>
    <input id="name" type="text" name="name" value="{{old('name')}}">
    <div>{{ $errors->first('name') }}</div>

    <label for="email">Email</label>
    <input id="email" type="email" name="email" value="{{old('email')}}">
    <div>{{ $errors->first('email') }}</div>

    <label for="comments">Message</label>
    <textarea name="message" id="" cols="30" rows="10">{{old('message')}}</textarea>
    <div>{{ $errors->first('message') }}</div>

    <button type="submit">Submit</button>

</form>
