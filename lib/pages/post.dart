import 'dart:convert';
import 'dart:math';
import 'package:flutter_posts/pages/AppBarr.dart';
import 'package:http/http.dart' as http;
import 'package:flutter/material.dart';
import 'package:flutter_posts/domain/post.dart';

class PostPage extends StatefulWidget {
  PostPage({Key? key, required this.id}) : super(key: key);

  final int id;

  @override
  _PostPageState createState() => _PostPageState(id: this.id);
}
// page correspondant à un post
class _PostPageState extends State<PostPage> {
  final int id;
  Post? post;

  _PostPageState({required this.id});

  @override
  void initState() {
    super.initState();
    this.loadPost(id);
  }

  void loadPost(int id) async {
    var uri = Uri.parse('http://10.0.2.2/dev_web/api/recettes.php?ID_recette=$id');
    var resp = await http.get(uri);

    var data = jsonDecode(resp.body);
    setState(() {
      this.post = Post.fromJson(data);
    });
  }

  Widget getTitle() {
    if (this.post == null) {
      return Text("Loading");
    }
    return Text("Post #${this.post!.ID_recette}");
  }

  Widget getBody() {
    if (this.post == null) {
      return Center(
          child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        children: <Widget>[
          Text("Loading"),
        ],
      ));
    }
    return Center(
      child:
        Container(
          height: double.infinity,
          decoration: BoxDecoration(
              image: DecorationImage(
                image: AssetImage("bg/index.png"),
                fit: BoxFit.cover,
                colorFilter: new ColorFilter.mode(Colors.black.withOpacity(0.2), BlendMode.dstATop),
              )
          ),
          padding: EdgeInsets.all(10),
          child: Table(
            children: [

              TableRow(children: [
                TableCell(child: Text("Titre de la recette :")),
                TableCell(child: Text(post!.nom_recette.toString())),
              ]),
              TableRow(children: [
                TableCell(child: Text("Liste ingredients :")),
                TableCell(child: Text(post!.liste_ingredients.toString())),
              ]),
              TableRow(children: [
                TableCell(child: Text("Liste ustensiles :")),
                TableCell(child: Text(post!.liste_ustensiles.toString())),
              ]),
              TableRow(children: [
                TableCell(child: Text("Recette :")),
                TableCell(child: Text(post!.recette_texte.toString())),
              ]),
              TableRow(children: [
                TableCell(child: Text("Image :")),
                TableCell(child: Image.network("http://10.0.2.2/dev_web/site/images/"+post!.image.toString())),
              ])
            ],
          ),
        ),


    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: BaseAppBar(
        title: Text("widget.title"+post!.nom_recette.toString()),
        appBar: AppBar(),
        widgets: <Widget>[Icon(Icons.more_vert)],
      ),

      body: getBody(),
    );
  }
}
