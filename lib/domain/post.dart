class Post {
  late int id;
  late int userId;
  late String title;
  late String body;
// modèle du post
  Post(
      {required this.id,
        required this.userId,
        required this.title,
        required this.body});

  static Post fromJson(Map<String, dynamic> json) {
    return Post(
        id: json["id"],
        userId: json["userId"],
        title: json["title"],
        body: json["body"]);
  }

  Map<String, dynamic> toJson(){
    return{
      'userId': userId,
      'title': title,
      'body': body,
  };
}
  static List<Post> fromList(Iterable list){
    return List<Post>.from(list.map((e)=>Post.fromJson(e)));
  }
}