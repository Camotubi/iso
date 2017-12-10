<template>
    <div>
        <div class="form-group">
            <label>Atributo de Calidad</label>
            <select v-model="selectedQualityAttribute" @change="getCharacteristics" class="form-control">
                <option v-for = "qA in qualityAttributes" :value="qA.id">
                    {{qA.name}}
                </option>
            </select>
        </div>
        <div class="form-group">
            <label>Métrica:</label>
            <select v-model="selectedCharacteristic" @change="getSubcharacteristics" class="form-control" >
                <option v-for = "characteristic in characteristics" :value="characteristic.id">
                    {{characteristic.name}}
                </option>
            </select>
        </div>
        <div class="form-group">
            <label>Métrica:</label>
            <select v-model="selectedSubcharacteristic" @change="getMetrics" class="form-control">
                <option v-for = "subcharacteristic in subcharacteristics" :value="subcharacteristic.id">
                    {{subcharacteristic.name}}
                </option>
            </select>
        </div>
    <form method="POST" :action ="url">
        <input type="hidden" name="_token" :value="csrf">
        <div class="form-group">
            <label>Métrica:</label>
            <select v-model="selectedMetric" class="form-control">
                <option v-for = "metric in metrics" :value="metric.id">
                    {{metric.name}}
                </option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Agregar Metrica">
    </form>
    </div>


</template>
<style>

</style>

<script>

export default  {
    data: function() {
        return {
            qualityAttributes:{},
            subcharacteristics:{},
            characteristics:{},
            metrics:{},
            selectedQualityAttribute:{},
            selectedCharacteristic:{},
            selectedSubcharacteristic:{},
            selectedMetric:{},
            csrf:document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
    props:{
        url:{},
        deliverable:{},
    },
    created() {
		// Fetch initial results
		this.getQualityAttributes();
    },
    
    methods: {
		getQualityAttributes() {
			var self = this
			axios.get('/api/qualityAttributes/').then(
				function(response){
					self.qualityAttributes = response.data;
				});
		},
		getCharacteristics(){
            var self = this
            var characteristics = axios.get('/api/characteristics/?parent='+this.selectedQualityAttribute).then(
				function(response){
					self.characteristics = response.data;
				});
        },
		getSubcharacteristics(){
            var self = this
            var subcharacteristics = axios.get('/api/subcharacteristics/?parent='+this.selectedCharacteristic).then(
				function(response){
					self.subcharacteristics = response.data;
				});
        },
		getMetrics(){
            var self = this
            var metrics = axios.get('/api/metrics/?parent='+this.selectedSubcharacteristic+'&deliverableId='+this.deliverable).then(
				function(response){
					self.subcharacteristics = response.data;
				});
        },

	}
	

}

</script>
