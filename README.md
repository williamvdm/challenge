# Challenge

## Introductie
DeliveryMatch is gekoppeld aan veel externe systemen, het werk dat je uitvoerd bij DeliveryMatch bestaat dan ook uit het koppelen van externe systemen systemen. Je werk zal bestaan uit zowel backend als frontend development.

## Uitleg
Je moet voor deze challenge 2 kleine applicaties bouwen. De backend moet een REST API worden waarbij je parcels kan aanmelden. Waneer een parcel word aangemeld word er een uniek tracking nummer gegenereerd en terug gegeven in de response. Vervolgens moet er ook een endpoint zijn waarbij je de status van een parcel kan ophalen aan de hand van het tacking nummer. 

[TODO: frontend uitleg stuk]  

## Frontend

## Backend
Voor de backend ben je helemaal vrij in welke programmeertaal, framework en database je gaat gebruiken. Het is de bedoeling dat het een REST API word met de volgende endpoints.

`POST /parcels`

request:
```json
{
  "name": "string",
  "deliveryDate": "date"
  "deliveryAddress": {
    "street": "string",
    "houseNumber": "int",
    "houseNumberExtension": "string",
    "city": "string",
    "country": "string",
    "postcode": "string"
  },
  "weight": "int",
  "dimension": {
    "height": "int",
    "lenght": "int",
    "width": "int" 
  }
}   
```

response:
```json
{
  "trackingNumber": "string",
}
```

`GET /parcels/{trackingNumber}`

response:
```json
{
  "name": "string",
  "deliveryDate": "date"
  "deliveryAddress": {
    "street": "string",
    "houseNumber": "int",
    "houseNumberExtension": "string",
    "city": "string",
    "country": "string",
    "postcode": "string"
  },
  "weight": "int",
  "dimension": {
    "height": "int",
    "lenght": "int",
    "width": "int" 
  },
  "trackingNumber": "string",
  "status": "string"
}
```

## Waar moet je op letten

