
<h1> This is my contact page </h1>
<a href="{{ url('/') }}"> Back to  home</a>




<form action="{{route ('Student.store') }}" method="POST">
 @csrf
 <label for="name">First name:</label><br>
 <input type="text" id="name" name="name" value="John"><br>
 <label for="lname">Last name:</label><br>
 <input type="text" id="lname" name="lname" value="Doe"><br><br>
 <label for="phone"> phone:</label><br>
 <input type="number" id="phone" name="phone" value=""><br><br>
 <input type="submit" value="Submit">
</form>
  </form>
