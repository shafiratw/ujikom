@if(!empty($url))
  <img src="{{ $url }}" alt="" width="72" height="54" class="rounded" style="object-fit:cover;">
@else
  <div class="bg-light rounded" style="width:72px;height:54px;"></div>
@endif