import 'package:flutter/material.dart';
import 'package:flutter_posts/pages/AppBarr.dart';
import 'package:flutter_posts/pages/add_post.dart';
import 'package:flutter_posts/pages/desserts.dart';
import 'package:flutter_posts/pages/entrees.dart';
import 'package:flutter_posts/pages/post.dart';
import 'package:flutter_posts/pages/recettes.dart';
import 'package:flutter_posts/pages/repas.dart';

import 'pages/home.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),


      //home: HomePage(title: 'Posts'),

      onGenerateRoute: (settings){
        if(settings.name == '/'){
          return MaterialPageRoute(builder: (contect) => HomePage(title: 'Accueil'));
        }
        if(settings.name == '/post'){
          return MaterialPageRoute(builder: (contect) => AddPostPage());
        }
        if(settings.name == '/entrees'){
          return MaterialPageRoute(builder: (contect) => HomePage(title: "Liste des entrées"));
        }
        if(settings.name == '/repas'){
          return MaterialPageRoute(builder: (contect) => HomePage(title: "Liste des repas"));
        }
        if(settings.name == '/desserts'){
          return MaterialPageRoute(builder: (contect) => HomePage(title: "Liste des desserts"));
        }
        if(settings.name == '/recettes'){
          return MaterialPageRoute(builder: (contect) => RecettesPage());
        }
        var uri=Uri.parse(settings.name ?? '');
        if(uri.pathSegments.length == 2 && uri.pathSegments.first == 'posts'){
          var id = int.parse(uri.pathSegments[1]);
          return MaterialPageRoute(builder: (context) => PostPage(id: id));
        }
      },
    );
  }
}
