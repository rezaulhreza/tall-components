@props(['textToCopy' => 'Copy Me'])
<x-app-layout>

<x-copy-button copy="hover" :clipboardText="$textToCopy">

</x-app-layout>
