<template>
  <k-block-figure @open="open" @update="update" class="k-card">
    <k-aspect-ratio
      class="k-image k-card-image"
      ratio="1/1"
      data-back="pattern"
    >
      <img v-if="article.image" :src="article.image.url" alt="" />
    </k-aspect-ratio>

    <figcaption class="k-card-content">
      <span class="k-card-text">{{ article.text }}</span>
    </figcaption>
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
.k-block-type-image-auto {
  max-width: 100%;
  max-height: 30rem;
}

.k-card-icon,
.k-card-image {
  border-top-left-radius: 1px;
  border-top-right-radius: 1px;
  overflow: hidden;
}

.k-image img {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}
.k-card {
  position: relative;
  border-radius: 1px;
  box-shadow: 0 1px 3px 0 rgb(0 0 0 / 10%), 0 1px 2px 0 rgb(0 0 0 / 6%);
  min-width: 0;
  background: #fff;
}

.k-image[data-back="pattern"] {
  background: #2b2b2b
    url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXR0ZXJuIGlkPSJhIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiPjxwYXRoIGZpbGw9InJnYmEoMCwgMCwgMCwgMC4yKSIgZD0iTTAgMGgxMHYxMEgwem0xMCAxMGgxMHYxMEgxMHoiLz48L3BhdHRlcm4+PHJlY3QgZmlsbD0idXJsKCNhKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==);
}

.k-block-container {
  position: relative;
  padding: 0.75rem;
  border-bottom: 1px dashed rgba(0, 0, 0, 0.1);
  background: #efefef;
}

.k-card-content {
  line-height: 1.25rem;
  border-bottom-left-radius: 1px;
  border-bottom-right-radius: 1px;
  min-height: 2.25rem;
  padding: 0.5rem 0.75rem;
  overflow-wrap: break-word;
  word-wrap: break-word;
}
.k-block-figure figcaption {
  padding-top: 0.5rem;
  color: #111;
  font-size: 0.875rem;
  text-align: left;
}
.k-card-text {
  display: block;
  font-weight: 400;
  text-overflow: ellipsis;
  font-size: 0.875rem;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.k-card-info {
  color: #777;
  display: block;
  font-size: 0.875rem;
  text-overflow: ellipsis;
  overflow: hidden;
}
[dir="ltr"] .k-card-info {
  margin-right: 4rem;
}

// .k-editor-image-block{margin:1.5rem 0}

// .k-editor-image-block figure{line-height:0}

// .k-editor-image-block-wrapper img{width:100%}

// .k-editor-image-block-wrapper[data-responsive]

// img{position:absolute;top:0;right:0;bottom:0;left:0;object-fit:contain;height:100%}

// .k-aspect-ratio>* {
//     position: relative;
//     top: 0;
//     left: 0;
//     bottom: 0;
//     right: 0;
//     height: 100%;
//     width: 100%;
//     max-height: 300px;
//     -o-object-fit: contain;
//     object-fit: contain;
// }
</style>
