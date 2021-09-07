import 'dart:async';
import 'dart:convert';

import 'dart:typed_data';

import 'package:flutter_posts/domain/post.dart';
import 'package:http/http.dart' as http;
import 'package:flutter/material.dart';

import 'AppBarr.dart';

class RecettesPage extends StatefulWidget {
  RecettesPage({Key? key, required this.title, required this.etat}) : super(key: key);

  final String title;
  final String etat;

  @override
  _RepasPageState createState() => _RepasPageState(etat: this.etat);
}

class _RepasPageState extends State<RecettesPage> {

  List<Post> posts = <Post>[];
  final String etat;

  _RepasPageState({required this.etat});

  @override
  void initState() {

    super.initState();
    this.loadData();
  }
// contact avec l'API
  void loadData() async {
    var uri=Uri.parse('http://10.0.2.2/dev_web/api/recettes.php');
    if(etat=="entree"){
      var uri = Uri.parse('http://10.0.2.2:8000/dev_web/api/recettes.php?categorie=ent');
    }else if(etat=="repas"){
      var uri = Uri.parse('http://localhost:80/dev_web/api/recettes.php?categorie=pla');
    }else if(etat=="dessert"){
      var uri = Uri.parse('http://localhost:80/dev_web/api/recettes.php?categorie=des');
    }
    //var uri = Uri.parse('https://jsonplaceholder.typicode.com/posts');
    //var uri = Uri.parse('http://localhost/api/');
    // var uri = Uri.parse('https://jsonplaceholder.typicode.com/posts', body:{'name': 'doodle');
    var resp = await http.get(uri);

    Iterable list = jsonDecode(resp.body);
    print(list);
    setState(() {
      //this.posts = Post.fromList(list);
    });
  }


  Widget getBody() {
    if (this.posts.length == 0) {
      return Center(

          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              Text("Loading"),
            ],
          ));
    }
    return Container(
        decoration: BoxDecoration(
            image: DecorationImage(
              image: AssetImage("bg/index.png"),
              fit: BoxFit.cover,
              colorFilter: new ColorFilter.mode(Colors.black.withOpacity(0.2), BlendMode.dstATop),
            )
        ),
        child:
        ListView.separated(

          padding: EdgeInsets.all(10),
          itemCount: this.posts.length,
          itemBuilder: (context, index) {
            var post = this.posts[index];
            return TextButton(onPressed: ()=>Navigator.pushNamed(context, '/posts/${post.ID_recette}'), child: Text(post.nom_recette,style: TextStyle(color: Colors.lightBlue),));
          },
          separatorBuilder: (context, index)=> Divider(),
        )
    );

  }

  FutureOr onBack(dynamic value){
    this.loadData();
  }

  @override
  Widget build(BuildContext context) {

    return Scaffold(

      body: getBody(),

      appBar: BaseAppBar(
        title: Text(widget.title),
        appBar: AppBar(),
        widgets: <Widget>[Icon(Icons.more_vert)],
      ),

      // This trailing comma makes auto-formatting nicer for build methods.
    );
  }
}