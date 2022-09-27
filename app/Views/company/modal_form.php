<?php echo form_open(get_uri("company/save"), array("id" => "company-form", "class" => "general-form", "role" => "form")); ?>
<div class="modal-body clearfix">
    <div class="container-fluid">
        <input type="hidden" name="id" value="<?php echo $model_info->id; ?>" />
        <div class="form-group">
            <div class="row">
                <label for="name" class=" col-md-3"><?php echo app_lang('company_name'); ?></label>
                <div class=" col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "name",
                        "name" => "name",
                        "value" => $model_info->name,
                        "class" => "form-control",
                        "placeholder" => app_lang('company_name'),
                        "data-rule-required" => true,
                        "data-msg-required" => app_lang("field_required")
                    ));
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label for="address" class=" col-md-3"><?php echo app_lang('address'); ?></label>
                <div class=" col-md-9">
                    <?php
                    echo form_textarea(array(
                        "id" => "address",
                        "name" => "address",
                        "value" => $model_info->address,
                        "class" => "form-control",
                        "placeholder" => app_lang('address'),
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label for="phone" class=" col-md-3"><?php echo app_lang('phone'); ?></label>
                <div class=" col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "phone",
                        "name" => "phone",
                        "value" => $model_info->phone,
                        "class" => "form-control",
                        "placeholder" => app_lang('phone')
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label for="email" class=" col-md-3"><?php echo app_lang('email'); ?></label>
                <div class=" col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "email",
                        "name" => "email",
                        "value" => $model_info->email,
                        "class" => "form-control",
                        "placeholder" => app_lang('email')
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label for="website" class=" col-md-3"><?php echo app_lang('website'); ?></label>
                <div class=" col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "website",
                        "name" => "website",
                        "value" => $model_info->website,
                        "class" => "form-control",
                        "placeholder" => app_lang('website')
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label for="vat_number" class=" col-md-3"><?php echo app_lang('vat_number'); ?></label>
                <div class=" col-md-9">
                    <?php
                    echo form_input(array(
                        "id" => "vat_number",
                        "name" => "vat_number",
                        "value" => $model_info->vat_number,
                        "class" => "form-control",
                        "placeholder" => app_lang('vat_number')
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="form-group ">
            <div class="row">
                <label for="is_default"  class=" col-md-3"><?php echo app_lang('default_company'); ?></label>

                <div class=" col-md-9">
                    <?php
                    //is set default company, disable the checkbox
                    $disable = "";
                    if ($model_info->is_default) {
                        $disable = "disabled='disabled'";
                    }
                    echo form_checkbox("is_default", "1", $model_info->is_default, "id='is_default' class='form-check-input mt-2' $disable");
                    ?> 

                    <?php if ($model_info->is_default) { ?>
                        <input type="hidden" name="is_default" value="<?php echo $model_info->is_default; ?>" />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-bs-dismiss="modal"><span data-feather="x" class="icon-16"></span> <?php echo app_lang('close'); ?></button>
    <button type="submit" class="btn btn-primary"><span data-feather="check-circle" class="icon-16"></span> <?php echo app_lang('save'); ?></button>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#company-form").appForm({
            onSuccess: function (result) {
                $("#company-table").appTable({reload: true});
                appAlert.success(result.message, {duration: 10000});
            }
        });

        setTimeout(function () {
            $("#name").focus();
        }, 200);
    });
</script>    