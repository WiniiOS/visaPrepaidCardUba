<x-mail::message>
# _Confirmation de commande_

Cher {{ $surname }},

Nous vous remercions d'avoir passé commande chez LTC GROUP. Nous sommes ravis de vous compter parmi nos clients.

#### _Voici les détails de votre commande_ :

- Livraison : {{ $deliveryAmount }}
- Numero ID Unique : {{ $niuAmount }}
- Segment : {{ $segmentAmount }}
- Prix Total : {{ $total_order }}


## _Veuillez vous rassurer que les informations ci-dessous sont exactes :_

- Segment : Segment {{ $segment }}
- Nom Complet : {{ $surname }} {{ $lastname }}
- Addresse E-Mail : {{ $email }}
- Ville : {{ $city }}
- Quartier : {{ $residentialAddress }}
- No Telephone : Segment {{ $phone1 }}
- No Telephone 2 (Optionnel) : {{ $phone2 }}
- No CNI : {{ $cniNumber }}
- Lieu de délivrance : {{ $lieuCreationCni }}
- Date de naissance : {{ $birthday }}

- Profession : {{ $profession }}
- Adresse de livraison : {{ $delivery_address }}
- Je souhaite etre livré : {{ $delivery }}
- Je souscrit au No Identifiant Unique : {{ $uin }}

### _Personne à contacter en cas de besoin :_

- Nom Complet : {{ $toContactName }}
- Telephone : {{ $toContactPhone }}
- Addresse : {{ $toContactAddress }}

#### _NB : Documents à fournir pour tous les segments du Basic au Premium_
    1. Une demie carte photo
    2. Photocopie de la CNI ou Passeport valide
    3. NIU ou Numero Contribuable
    4. Plan de localisation
##### _Document additionnel à fournir au cas ou vous avez souscrit aux segments 2 Standard ou 3 Premium_
    1. Un justificatif de revenu( Contrat de travail, bulletin de paie, Registre commerce)

#### _Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter à l'adresse suivante : contact@ltcprepaidcard.com_

Nous vous remercions de votre confiance.

> [Cliquez ici pour Chater sur WhatsApp](https://wa.me/237673209375)
> [Visitez Nos autres services](https://www.ltcgroup.net/)

Cordialement,
_L'EQUIPE LTC GROUP_
</x-mail::message>
