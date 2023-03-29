# Les variables CSS

Les propriétés personnalisées CSS (*custom properties* en anglais, aussi parfois appelés variables CSS) sont des entités définies par les développeurs ou les utilisateurs d’une page Web, contenant des valeurs spécifiques utilisables à travers le document. Elles sont initialisées avec des propriétés personnalisées (par exemple `--main-color: black;`) et accessibles en utilisant la notation spécifique `var()` (par exemple : `color: var(--main-color);`).

Des sites et applications web complexes peuvent avoir des feuilles de style où de nombreuses valeurs sont répétées. Ainsi, la même couleur pourra être utilisée à des centaines d’endroits où il faudra la mettre à jour si besoin. Les propriétés personnalisées permettent de stocker une valeur à un endroit puis de réutiliser cette valeur (on factorise ainsi le code).

Voici comment déclarer une variable :

```css
element {
  --main-bg-color: brown;
}
```

Et voici comment l’utiliser :

```css
element {
  background-color: var(—main-bg-color);
}
```

