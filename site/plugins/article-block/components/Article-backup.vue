<template>
  <k-block-figure
    :is-empty="!article.icon"
    empty-icon="audio-file"
    empty-text="No page selected yet …"
    @open="open"
    @update="update"
  >
    <div class="k-block-type-audio-wrapper">
      <div>
        <k-aspect-ratio
          class="k-block-type-audio-poster"
          cover="true"
          ratio="1/1"
          style="padding:0"
        >
          <img 
            v-if="article.icon" 
            :src="article.icon.url" 
            alt="" />
        </k-aspect-ratio>
      </div>
    </div>
  </k-block-figure>
</template>

<script>
export default {
  computed: {
    // poster() {
    //   return this.content.poster[0] || {};
    // },
    // source() {
    //   return this.content.source[0] || {};
    // },
    article() {
      return this.content.article[0] || {};
    },
  },
};
</script>
<style lang="scss">
.k-editor-image-block{margin:1.5rem 0}

.k-editor-image-block figure{line-height:0}

.k-editor-image-block-wrapper img{width:100%}

.k-editor-image-block-wrapper[data-responsive] 

img{position:absolute;top:0;right:0;bottom:0;left:0;object-fit:contain;height:100%}

.k-aspect-ratio>* {
    position: relative;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    height: 100%;
    width: 100%;
    max-height: 300px;
    -o-object-fit: contain;
    object-fit: contain;
}

.k-editor-image-block-wrapper[data-responsive]{position:relative;padding-bottom:66.66%;background:#2d2e36}

.k-editor-image-block-wrapper:focus{outline:0}

.k-editor-image-block-wrapper:focus 

img{outline:2px solid rgba(66,113,174,.25);outline-offset:2px}.k-editor-image-block 

figcaption{display:block;margin-top:.75rem}

.k-editor-image-block .k-editable-placeholder,.k-editor-image-block .ProseMirror{
    text-align:center;font-size:.875rem;line-height:1.5em}
    
.k-editor-image-block-placeholder{display:flex;line-height:1;justify-content:center;align-items:center;font-style:italic;font-size:.875rem;width:100%;border:1px dashed #ddd;border-radius:3px;text-align:center;color:#bbb}.k-editor-image-block-placeholder:focus{outline:0}.k-editor-image-block-placeholder .k-button{padding:.75rem;display:flex;align-items:center;color:#000;margin:0 .5rem}.lazysrcset-icon,.lazysrcset-icon>button{width:100%;text-align:right}.lazysrcset-icon>button{display:inline-block;color:#fff;background-color:#000;padding:.25rem .5rem}

.k-block-type-audio-wrapper {
  display: flex;
  /* padding: 1rem; */
    align-items: center;
    justify-content: center;    
}
.k-block-type-audio-poster {
  width: auto;
  /* margin-right: 1rem; */
  padding-bottom: 0;
}
.k-block-type-audio-title,
.k-block-type-audio-subtitle {
  font-size: 1.5rem;
}
.k-block-type-audio-title {
  font-weight: 600;
}
.k-block-type-audio-subtitle {
  margin-bottom: 1rem;
  color: #999;
}
.k-block-type-audio-description {
  line-height: 1.5;
}
.k-block-type-audio-element {
  margin-top: 2rem;
  height: 2rem;
}

.k-block-type-localvideo {
    width: 100%;
    background-color: #000;
    line-height: 0;
}

.k-block-type-localvideo video {
    width: 100%;
    height: auto;
}

.k-block-type-localvideo .localvideo-preview {
position: absolute;
width: 100%;
height: 100%;
}

</style>