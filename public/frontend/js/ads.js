var data_table=null;
function datatableInit(){
    data_table=$('#kt_datatable').KTDatatable({
        data: {
            type: 'remote',
            source: {
                read: {
                    url: '/ads/getAdsDataTable',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    params:{
                        parent:0,
                    }
                },
            },
            pageSize: 10,
            serverPaging: true,
            serverFiltering: false,
            serverSorting: true
        },
        layout: {
            scroll: true,
            footer: true,
        },
        sortable: true,
        pagination: true,

        search: {
            input: $('#kt_datatable_search_query'),
            key: 'generalSearch'
        },

        // columns definition
        columns:
        [
            {
                field: 'adsType',
                title: lang.ads_tbl_adstype,
                //width:flex,
            },
            {
                field: 'adsId',
                title: lang.ads_tbl_adsid,
                width:180,
                //sortable: 'asc'
            },{
                field: 'enable',
                title: 'Enable',
                width:180,
                template: function(row) {
                    return row.enable?'<span class="label label-dot label-success"></span>':'<span class="label label-dot"></span>';
                }
            },{
                field: 'Actions',
                width:100,
                title: lang.actions,
                sortable: false,
                overflow: 'visible',
                autoHide: false,
                template: function(row) {
                    return '\
                    <div class="dropdown dropdown-inline">\
                    <a data-toggle="modal" data-target="#editAdModal" href="javascript:;" onclick="\
                    $(\'#edit_ad_id\').val('+row.id+');\
                    $(\'#edit_ad_adsid\').val(\''+row.adsId+'\');\
                    $(\'#edit_ad_enable\').prop(\'checked\','+(row.enable?true:false)+');\
                    " class="btn btn-sm btn-clean btn-icon" title="Reset password">\
                        <span class="svg-icon svg-icon-md"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path><rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect></g></svg></span>\
                    </a>'+
                    '</div>\
                    ';
                },
            }
        ],
        translate: trans_pagination,
    });
}
jQuery(document).ready(function() {
    datatableInit();
});
function isValidateEditAdModal(){
    var reg = /^\d+$/;
    if($('#edit_ad_adsid').val()==''){
        $('#edit_ad_adsid').focus();
        return false;
    }
    return true;
}
function submitAdEditForm(){
    //if(!isValidateEditAdModal())return;
    var form_data = new FormData();
    form_data.append('id',$('#edit_ad_id').val());
    form_data.append('adsId',$('#edit_ad_adsid').val());
    form_data.append('enable',$('#edit_ad_enable').prop('checked')?1:0);
    $.ajax({
        url: '/ads/saveAd',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: form_data,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        dataType: "json",
        success: function (response) {
            location.reload();
            $('#ad_model_close_btn').trigger('click');
        },
        error: function (response) {

        }
    });
}