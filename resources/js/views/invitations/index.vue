<script type="text/ecmascript-6">
    export default {}
</script>

<template>
    <index-view title="Invitations" resource="invitations">
        <router-link slot="btn-new-entry" :to="{name:'invitations-new'}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            New
        </router-link>

        <template slot="group-item" slot-scope="slotProps">
            <router-link :to="{name:'invitations-edit', params:{id: slotProps.entry.id}}" class="list-group-item list-group-item-action">
                <div class="px-6 hover:bg-gray-100">
                    <div class="flex justify-between">
                        <h5 class="mb-1 text-gray-600">{{slotProps.entry.email}}</h5>
                        <small class="text-gray-600">{{timeAgo(slotProps.entry.created_at)}}</small>
                    </div>
                    <p class="mb-1 text-gray-300">{{slotProps.entry.role}}</p>
                </div>
            </router-link>
        </template>
    </index-view>
</template>