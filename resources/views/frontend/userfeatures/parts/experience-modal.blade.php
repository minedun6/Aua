<div class="modal fade" tabindex="-1" role="dialog" id="experienceModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Experience <button class="btn btn-xs btn-info" v-on:click="addExp">Add</button> </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group accordion" id="accordion4" >
                            <div class="panel panel-default" v-for="(experience, index) in experiences">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" v-bind:href="'#collapse_4_'+index " aria-expanded="false"> @{{ experience.date }} - @{{ experience.position }} </a>
                                    </h4>
                                </div>
                                <div v-bind:id="'collapse_4_'+index" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input class="form-control" type="text" v-model="experience.date">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input class="form-control" type="text" v-model="experience.position">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Employer</label>
                                                    <input class="form-control" type="text" v-model="experience.employer">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Responsabilities</label>
                                                    <textarea class="form-control" rows="2" v-model="experience.responsabilites"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->