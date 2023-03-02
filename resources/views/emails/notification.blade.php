<x-mail::message>
# _{{ __("emails.NotiTitle") }}_

{{ __("emails.Uno") }} {{ $surname }},

{{ __("emails.P1") }}

#### _{{ __("emails.Desc1") }}_ :

- {{ __("emails.No1") }} {{ $deliveryAmount }}
- {{ __("emails.No2") }} {{ $niuAmount }}
- {{ __("emails.No3") }} {{ $segmentAmount }}
- {{ __("emails.No4") }} {{ $total_order }}


## _{{ __("emails.SubTitle1") }}_

- {{ __("emails.No01") }} segment {{ $segment }}
- {{ __("emails.No02") }} {{ $surname }} {{ $lastname }}
- {{ __("emails.No03") }} {{ $email }}
- {{ __("emails.No04") }} {{ $city }}
- {{ __("emails.No05") }} {{ $residentialAddress }}
- {{ __("emails.No06") }}  {{ $phone1 }}
- {{ __("emails.No07") }} {{ $phone2 }}
- {{ __("emails.No08") }} {{ $cniNumber }}
- {{ __("emails.No09") }} {{ $lieuCreationCni }}
- {{ __("emails.No10") }} {{ $birthday }}

- {{ __("emails.No11") }} {{ $profession }}
- {{ __("emails.No12") }} {{ $delivery_address }}
- {{ __("emails.No13") }} {{ $delivery }}
- {{ __("emails.No14") }} {{ $uin }}

### _{{ __("emails.SubT2") }}_

- {{ __("emails.No15") }} {{ $toContactName }}
- {{ __("emails.No16") }} {{ $toContactPhone }}
- {{ __("emails.No17") }} {{ $toContactAddress }}

#### _{{ __("emails.NbTitle") }}_
    1. {{ __("emails.No18") }}
    2. {{ __("emails.No19") }}
    3. {{ __("emails.No20") }}
    4. {{ __("emails.No21") }}

##### _{{ __("emails.SubT3") }}_
    1. {{ __("emails.No22") }}

#### _{{ __("emails.SubT4") }} contact@ltcprepaidcard.com_

{{ __("emails.Paro1") }}

> [{{ __("emails.Link1") }}](https://wa.me/237673209375)
> [{{ __("emails.Link2") }}](https://www.ltcgroup.net/)

{{ __("emails.End1") }},
_{{ __("emails.End2") }}_
</x-mail::message>
