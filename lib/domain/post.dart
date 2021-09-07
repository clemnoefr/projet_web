class Post {
  late String ID_recette;
  late String nom_recette;
  late String duree_recette;
 // late String image_prix;
 // late String image_difficulte;
  late String date_creation_recette; //timestamp
  late String categorie_recette;
  late String image;
  late String recette_texte;
  late String nombre_personne;
  late String liste_ingredients;
  late String liste_ustensiles;
  late String ID_user;

// modèle du post
  Post(
      {required this.ID_recette,
  required this.nom_recette,
  required this.duree_recette,
  //required this.image_prix,
  //required this.image_difficulte,
  required this.date_creation_recette, //timestamp
  required this.categorie_recette,
  required this.image,
  required this.recette_texte,
  required this.nombre_personne,
  required this.liste_ingredients,
  required this.liste_ustensiles,
  required this.ID_user,
  });

  static Post fromJson(Map<String, dynamic> json) {
    return Post(
          ID_recette:json["ID_recette"],
          nom_recette:json["nom_recette"],
          duree_recette:json["duree_recette"],
          date_creation_recette:json["date_creation_recette"], //timestamp
          categorie_recette:json["categorie_recette"],
          image:json["image"],
          recette_texte:json["recette_texte"],
          nombre_personne:json["nombre_personne"],
          liste_ingredients:json["liste_ingredients"],
          liste_ustensiles:json["liste_ustensiles"],
          ID_user:json["ID_user"]
        );
  }

  Map<String, dynamic> toJson(){
    return{

      'ID_recette': ID_recette,
      'nom_recette': nom_recette,
     'duree_recette': duree_recette,
      'date_creation_recette': date_creation_recette,
      'categorie_recette': categorie_recette,
      'image': image,
      'recette_texte': recette_texte,
      'nombre_personne': nombre_personne,
      'liste_ingredients': liste_ingredients,
      'liste_ustensiles': liste_ustensiles,
     'ID_user': ID_user
  };
}
  static List<Post> fromList(Iterable list){
    return List<Post>.from(list.map((e)=>Post.fromJson(e)));
  }
}