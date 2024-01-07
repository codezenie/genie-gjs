<div id="gjs">
    <h1>GrapesJS Canvas</h1>
</div>


@push('css')
<style>
    /* Let's highlight canvas boundaries */
    #gjs {
      border: 3px solid #444;
    }

    /* Reset some default styling */
    .gjs-cv-canvas {
      top: 0;
      width: 100%;
      height: 100%;
    }
</style>
@endpush

@push('js')
<script>
    const editor = grapesjs.init({
        // Indicate where to init the editor. You can also pass an HTMLElement
        container: '#gjs',
        // Get the content for the canvas directly from the element
        // As an alternative we could use: `components: '<h1>Hello World Component!</h1>'`,
        fromElement: true,
        // Size of the editor
        height: '300px',
        width: 'auto',
        // Disable the storage manager for the moment
        storageManager: false,
        // Avoid any default panel
        panels: { defaults: [] },
      });

    </script>
@endpush
