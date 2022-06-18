

 {{-- 01 Laravel is the first and easiest way to show success text --}}
 @if ( session("success_text") )
 <div class="alert alert-primary" role="alert">
     {{ session("success_text") }}
 </div>
@endif

