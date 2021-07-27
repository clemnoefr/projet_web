import 'package:flutter/material.dart';

class BaseAppBar extends StatelessWidget implements PreferredSizeWidget {
  final Color backgroundColor = Colors.red;
  final Text title;
  final AppBar appBar;
  final List<Widget> widgets;

  /// you can add more fields that meet your needs

  const BaseAppBar({Key? key, required this.title, required this.appBar, required this.widgets})
      : super(key: key);

  @override
  Widget build(BuildContext context) {
    return AppBar(
      title: title,
      actions: [
        Container(
          margin: EdgeInsets.only(right: 50.0),
          child: IconButton(
              onPressed: ()=>Navigator.pushNamed(context, '/'),
              tooltip: 'Accueil',
              icon: const Icon(Icons.home)
          ),
        ),
        Container(
          margin: EdgeInsets.only(right: 50.0),
          child: IconButton(
              onPressed: ()=>Navigator.pushNamed(context, '/entrees'),
              tooltip: 'Liste Entrées',
              icon: const Icon(Icons.restaurant_menu)
          ),
        ),
        Container(
          margin: EdgeInsets.only(right: 50.0),
          child: IconButton(
              onPressed: ()=>Navigator.pushNamed(context, '/repas'),
              tooltip: 'Liste Repas',
              icon: const Icon(Icons.set_meal)
          ),
        ),
        Container(
          margin: EdgeInsets.only(right: 50.0),
          child: IconButton(
              onPressed: ()=>Navigator.pushNamed(context, '/desserts'),
              tooltip: 'Liste Desserts',
              icon: const Icon(Icons.cake_rounded)
          ),
        ),
      ],
    );
  }

  @override
  Size get preferredSize => new Size.fromHeight(appBar.preferredSize.height);
}
