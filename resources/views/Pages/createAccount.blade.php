@extends('layouts/app')

@section('content')
        
        <h1>Create Account</h1>

        <form >
                        <label>Username:</label>
                        <input type="text"><br>
                        <label>First name:</label>
                        <input type="text"><br>
                        <label>Last Name:</label>
                        <input type="text" ><br>
                        <label> Email:</label>
                        <input type="email"><br>
                        <label> Address:</label>
                        <input type="text"><br>
                        <label> Credit Card:</label>
                        <input type="text"><br>
                        <label> Password:</label>
                        <input type="password"><br>
                        <button type="submit">Create Account</button>
                    </form>


@endsection 

