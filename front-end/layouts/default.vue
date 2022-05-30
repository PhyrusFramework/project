<template>
<div>
    <page-content />
</div>
</template>

<script lang="ts">
import { AppComponent, PageContent } from 'phyrus-nuxt';

export default AppComponent.extend({

    components: {PageContent}

});
</script>