<x-mail::message>
Cher client Merçi d'avoir souscrit !

Votre commande a été envoyée avec success.

Nous vous contacterons bientot pour éffectuer votre livraison.

# Veillez verifier que les informations ci-dessous sont correctes
# Check if your data are correctly saved

#Recapitulatif de la commande

#Livraison : {{ $deliveryAmount }}
#Frais Numero ID Unique : {{ $niuAmount }}
#Segment : {{ $segmentAmount }}
#Total : {{ $total_order }}


# Segment : Segment {{ $segment }}
#Liste des documents à fournir (Démie carte photo/Photocopie de CNI ou Passeport valide/NIU ou Numero Contribuable/Plan de localisation)
#Si vous avez souscrit au Segment 2 Standard ou 3 Premium, Vous devrez fournir Un justificatif de revenu(Contrat de travail,bulletin de paie,Registre commerce)


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

# Souhaitez-vous etre livrée ? : {{ $delivery }}
# Souscrivez-vous au Numero ID Unique : {{ $uin }}


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
