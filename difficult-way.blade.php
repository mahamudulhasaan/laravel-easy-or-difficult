

{{-- 02 Laravel is the second and a little harder way to show the text of success --}}
@if ( session() -> has('success_text') )
 <div class="alert alert-success role="alert">
     {{ session() -> get("success_text") }}
 </div>
@endif
