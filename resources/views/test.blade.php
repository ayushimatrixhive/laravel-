<html>
   <body>
   {{URL:: current()}}
   <br>
   <a href="{{URL::to ('/index')}}">index</a>
   <br>
   <a href="{{URL::to ('/update')}}">Update</a>

   @include('person')

   @includeWhen($boolean=true, 'update', ['status' => 'complete'])

      <h1>hello ,{{$name}}</h1>

    
  
      <button type="submit" @disabled(true) >Submit</button>   
      <button type="submit" @disabled(0) >Submit</button>   
    

  
      @php
      $records="krisha";
      @endphp
      @if($records == "krisha")
      {{"hello krisha";}}
      lkmkl
      @elseif($records=="rajesh")
      {{"hello rajesh";}}
      lllll
      @else
      {{"hello ayushi";}}
      @endif
  

      @php
      $i=0;
      @endphp
      @for ($i = 0; $i < 10; $i++)
      <br>
      <br>The current value is *{{ $i }}
      @endfor

<br>
      @php
      $i=10;
      @endphp
      @switch($i)
         @case(1)
         <br>
            <br>First case...
            @break
      
         @case(2)
            <br>Second case...
            @break

         @case(3)
            <br>Third case...
            @break
      
         @default
            <br>Default case...
      @endswitch
<br>

<br>
            @php
            $kkk=[1,2,3,4];





            $users=[1,2,3,4,5];
            @endphp

            @foreach ($users as $user)
            @if ($loop->first)
               This is the first iteration.
            @endif
         <br>
            <!-- @if ($loop->last)
               This is the last iteration.
            @endif -->

            <!-- @if ($loop->index)
               This is the index iteration.
            @endif -->

<br>
            @if ($loop->iteration)
               This is the iteration iteration.
            @endif

            <!-- @if ($loop->depth)
               This is the depth iteration.
            @endif -->

            <!-- @if ($loop->parent)
               This is the parent iteration.
            @endif -->



            @endforeach

<br>
            @php
            $isActive = false;
            $hasError = true;
            @endphp
         
         <span @class([
            'p-4',
            'font-bold' => $isActive,
            'text-gray-500' => ! $isActive,
            'bg-red' => $hasError,
            ])></span>
         
         <span class="p-4 text-gray-500 bg-red"></span>


         @php
            $isActive = false;
            $hasError = true;
         @endphp
 
         <span @class([
            'p-4',
            'font-bold' => $isActive,
            'text-gray-500' => ! $isActive,
            'bg-red' => $hasError,
         ])>1111111111111111</span>

         <h2>{{10*30}}</h2>

      
</body> 
</html>
