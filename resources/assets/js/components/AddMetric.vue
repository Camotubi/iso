<template>
    <form>
        <select>
            <option v-for = "qA in qualityAttributes" :value="qA.id">
                {{qA.name}}
            </option>
        </select>
    </form>



</template>
<style>

</style>

<script>

export default  {
    data: function() {
        return {
            qualityAttributes:{},
            characteristics:{},
            subcharacteristics:{},
            metrics:{},
        }
    },
    created() {
		// Fetch initial results
		this.getResults();
	},
    methods: {
		// Our method to GET results from a Laravel endpoint
		getResults(page) {
			var self = this
			// Using vue-resource as an example
			axios.get('/api/qualityAttributes/').then(
				function(response){
					self.qualityAttributes = response.data;
				});
		}
	}

}

</script>
