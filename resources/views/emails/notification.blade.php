<x-mail::message>
# Introduction

Merçi cher client d'avoir souscrit 

Votre commande a été éffectuée avec success.

Nous vous contacterons bientot pour la livraison.

<x-mail::button :url="'https://ltcgroup.net'">
Visiter LTC Group
</x-mail::button>

Merçi,<br>
{{ config('app.name') }}
</x-mail::message>
