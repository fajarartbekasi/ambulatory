<script type="text/ecmascript-6">
    export default {}
</script>

<template>
    <index-view title="Specializations" resource="specializations">
        <router-link slot="btn-new-entry" :to="{name:'specializations-new'}" class="btn btn-outline-primary">
            New
        </router-link>

        <template slot="group-item" slot-scope="slotProps">
            <router-link :to="{name:'specializations-edit', params:{id: slotProps.entry.id}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{slotProps.entry.name}}</h5>
                    <small class="text-muted">{{timeAgo(slotProps.entry.created_at)}}</small>
                </div>
                <p class="mb-1">{{slotProps.entry.description}}</p>
            </router-link>
        </template>
    </index-view>
</template>