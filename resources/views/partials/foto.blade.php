<div class="bg-primary-subtle overflow-hidden" style="height: {{ $tinggi ?? '200px' }};">
  @if(!empty($url))
    <img src="{{ $url }}" alt="{{ $alt ?? '' }}" class="w-100 h-100"
         style="object-fit: cover;" onerror="this.style.display='none'">
  @endif
</div>