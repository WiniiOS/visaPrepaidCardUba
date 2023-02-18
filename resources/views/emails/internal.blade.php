<x-mail::message>
Bonjour LTC GROUP

Une nouvelle commande de carte visa prépayée a été enregistré

#Segment : Segment {{ $segment }}

# Nom Complet du Client : {{ $surname }} {{ $lastname }}
# Addresse Email : {{ $email }}
# Ville : {{ $city }}
# Quartier : {{ $residentialAddress }}
# Telephone : {{ $phone1 }}
# Telephone 2 (Optionnel) : {{ $phone2 }}
# Numéro CNI : {{ $cniNumber }}
# Lieu de délivrance de la CNI : {{ $lieuCreationCni }}
# Date de naissance : {{ $birthday }}
# Profession : {{ $profession }}
# Adressee_De_Livraison : {{ $delivery_address }}


# Personne à contacter en cas de besoin

# Nom : {{ $toContactName }}
# Telephone : {{ $toContactPhone }}
# Addresse : {{ $toContactAddress }}


<x-mail::button :url="'https://ltcgroup.net'">
Visiter LTC Group
</x-mail::button>

Merçi,<br>
{{ config('app.name') }}
</x-mail::message>
