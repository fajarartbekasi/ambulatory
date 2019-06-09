<script type="text/ecmascript-6">
    export default {}
</script>

<template>
    <index-view title="Staff" resource="staff">
        <router-link slot="btn-new-entry" :to="{name:'invitations-new'}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            Invite staff
        </router-link>

        <template slot="group-item" slot-scope="slotProps">
            <div class="px-6 hover:bg-gray-100">
                <div class="flex justify-between">
                    <h5 class="mb-1 text-gray-900">{{slotProps.entry.name}}</h5>
                    <small class="text-gray-500">{{timeAgo(slotProps.entry.created_at)}}</small>
                </div>
                <p class="mb-1 text-gray-700">{{slotProps.entry.role}}</p>
            </div>
        </template>
    </index-view>
</template>