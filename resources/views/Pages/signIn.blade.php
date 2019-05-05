@extends('layouts/app')

@section('content')

        <h1>Sign In</h1>
        <form >
            Account details<br>
            Username:
            <input type="text"><br>
            Password:
            <input type="password"><br>
            <button type="submit">Sign In</button>
            <p>Don't have an Account? <a id="create" href="/createAccount">Create</a> one.</p> 
        </form>
@endsection 

