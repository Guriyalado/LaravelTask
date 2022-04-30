
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div>
<form action="{{url('search')}}" method="get" class="form-inline" style="float:right; padding:10px">
                @csrf
                <input class="form-control" type="search" name="search">
                <input type="submit" value="search" class="btn btn-success">

              </form>
            </div>

<div style="padding-bottom:20px" class="container-fluid page-body-wrapper">
          <div class="container" align="center">
            @if(session()->has('message'))
  <div class="alert alert-success">

  <button type="button" class="close" data-dismiss="alert"></button>
  {{session()->get('message')}}

  </div>

  @endif
           <table>
             <tr  align="center" style="background-color:red;">
              
               <th style="padding:10px">Firstname</th>
               <th style="padding:10px">Lastname</th>
               <th style="padding:10px">Email</th>
               <th style="padding:10px">Password</th>
               <th style="padding:10px">Date</th>
               <th style="padding:10px">Gender</th>
               <th style="padding:10px">Income</th>
               <th style="padding:10px">Occupation</th>
               <th style="padding:10px">Family</th>
               <th style="padding:10px">Manglik</th>

               
             </tr>

             @foreach($data as $product)
             <tr align="center"   style="background-color:white;">
              
               <td>{{$product->firstname}}</td>
               <td>{{$product->lastname}}</td>
               <td>{{$product->email}}</td>
               <td>{{$product->password}}</td>
               <td>{{$product->date}}</td>
               <td>{{$product->gender}}</td>
               <td>{{$product->income}}</td>
               <td>{{$product->occupation}}</td>
               <td>{{$product->family}}</td>
               <td>{{$product->manglik}}</td>
               
             </tr>
            @endforeach
           </table>
          </div>
        </div>
       </body>
</html>