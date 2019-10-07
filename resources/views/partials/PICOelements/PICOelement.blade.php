<div class="card-body">
    <div class="row">
        <div class="col-md-8 margin2M">
            <input type="text" data-olddescriptors="" data-PICO="{{ $PICOiterative }}" id="datainput{{ $PICOiterative }}" data-improve="" data-previous-decs="{{ (!!($olddata) ? $olddata['previousdata'] : '')  }}"  data-previous-improve-query=""
                   data-oldVal="{{ (!!($olddata) ? $olddata['oldval'] : '')  }}"
                   class="form-control PICOchangeitem" placeholder="{{ __('lang.pico_ex'.$PICOiterative) }}"
                   value="{{ (!!($olddata) ? $olddata['query'] : '')  }}" />
        </div>
        <div class="col-md-4">
            @php
            $selval = (int)(!!($olddata) ? $olddata['fieldselection'] : 0);
            @endphp
            <select name="" class="form-control black PICOchangeitem" data-PICO="{{ $PICOiterative }}" id="FieldList{{ $PICOiterative }}" data-oldVal="{{ (!!($olddata) ? $olddata['fieldoldval'] : '')  }}" class="form-control formSelect">
                @foreach($FieldNames as $FieldName)
                    <option class="PICOchangeitem" data-PICO="{{ $PICOiterative }}" value="{{ $FieldName }}"
                        @if ( $loop->iteration=== $selval) )
                         selected
                        @endif
                        >{{ $FieldName }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row margin1">
        <div class="col-12">
            <button class="btn btn-primary margin2M ExpandDeCS"
                    id="Exp{{ $PICOiterative }}">{{ __('lang.butexp') }}<span class="badge badge-light badgeM startlanguage" style="margin-left:15px;"></span></button>
            <div class="btn-group">
                <a id="ResNumLocal{{ $PICOiterative }}" target="_blank" class="btn colorO d-none"
                   data-toggle="tooltip" data-placement="top" title="{{ __('lang.clickres') }}"><label></label>
                    <span class="badge badge-light badgeM" style="margin-left:15px;"></span></a>

                @if($PICOiterative>1)
                    <a id="ResNumGlobal{{ $PICOiterative }}" target="_blank" class="btn colorP d-none"
                       data-toggle="tooltip" data-placement="top"
                       title="{{ __('lang.clickres') }}"><label></label><span
                            class="badge badge-light badgeM" style="margin-left:15px;"></span></a>
                @endif
                <button id="CalcRes{{ $PICOiterative }}" class="btn btn-info" data-toggle="tooltip"
                        data-placement="top" title="{{ __('lang.upres') }}">{{ __('lang.butres') }}</button>
            </div>
        </div>
    </div>
</div>
