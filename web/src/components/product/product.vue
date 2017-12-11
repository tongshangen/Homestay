<template>
	<div>
		<h1>123</h1>
		<div>
	        <datagrid api="http://localhost:999/PHP/student.php" :filterCols="filterColumns"></datagrid>
	    </div>
	</div>
</template>

<script>
	import datagrid from '../datagrid/datagrid.vue'

    export default {
        data: function(){
            return {
                filterColumns: []
            }
        },
        components: {
            datagrid
        }
    }
</script>