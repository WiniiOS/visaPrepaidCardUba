<x-mail::message>
Cher Client Merçi D'avoir Souscrit !

Votre commande a été envoyée avec success.

Nous vous contacterons bientot pour éffectuer votre livraison.

# Veillez verifier que les informations ci-dessous sont correctes
# Check if your data are correctly saved


# Segment : Segment {{ $segment }}

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
# Livraison : {{ $Delivery }}
# NuméroIdentifiantUnique : {{ $uin }}

# Personne à contacter en cas de besoin

# Nom : {{ $toContactName }}
# Telephone : {{ $toContactPhone }}
# Addresse : {{ $toContactAddress }}

EN CAS D'ERREUR CONTACTEZ NOUS 

<x-mail::button :url="'https://wa.me/237673209375'">
CONTACT
</x-mail::button>

Merçi,<br>
{{ config('app.name') }}
</x-mail::message>
