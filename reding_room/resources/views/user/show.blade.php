
@extends('headerpage')
@section('content')
<title>books</title>
    <style>
    .head{
        text-align:center;
    }
    h2{
        margin-top:136px;
        
    }
   
    iframe{
        
        width: 1847px;
        height: 820px;

    }
    </style>
</head>
<body>
    <h2 class="head" >{{$sbook->book_name}} </h2><br>
    <h6 class="head">{{$sbook->writer_name}} </h6>
    <!-- <input type="hidden" src="{{url('File/book',$sbook->book_details)}} "> </input> -->
    <iframe src="{{url('File/book/'.$sbook->book_details)}}"  ></iframe>
    
</body>

@endsection