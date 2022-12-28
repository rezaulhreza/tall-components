@props(['clipBoardText' => '','copy' => true])
<div
  class="flex"
  x-data="{
    isVisible: {{ $copy === true ? 'true' : 'false' }},
    copied: false,
  }"
  x-init="window.copyToClipboard.init()"
  @if ($copy === 'hover')
    @mouseleave="isVisible = false"
    @mouseover="isVisible = true"
  @endif
  x-cloak
>
    {{ $slot }}
    @if ($copy)
      <div class="flex ml-1">
        <button
          :class="[isVisible ? 'visible btn btn-default btn-xs ml-2 mt-1' : 'invisible']"
          x-on:click="
            copied = true;
            setTimeout(() => copied = false, 2000);
          "
          class="copy btn btn-default btn-sm"
          data-clipboard-text="{{ $clipboardText }}"
          title="{{ $title ?? '' }}"
        >
          <i class="fa fa-copy"></i>
        </button>
        <div x-cloak x-show="copied" class="absolute p-1 px-2 text-green bg-white">
          <i class='ticked h-5 w-12' title="Copied!"></i>
        </div>
      </div>
    @endif
  </div>

<script>

// Copy data to clipboard
window.copyToClipboard = {
    isInitialised: false,

    init() {
      if (this.isInitialised) {
        return
      }

      this.isInitialised = true

      new Clipboard('.copy', {
        text: function (trigger) {
          return trigger.getAttribute('data-clipboard-text');
        }
      }).on('success', function (e) {
        e.clearSelection();
      })
    },
}

</script>
